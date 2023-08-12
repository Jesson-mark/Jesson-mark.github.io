# basenji_train.py：
代码运行流程：根据`params_small.json`文件获取模型参数与训练参数，然后使用`seqnn.SeqNN`类构建模型，然后使用`trainer.Trainer`类构建`seqnn_trainer`，以对模型进行训练，然后通过`seqnn_trainer`调用compile与fit函数执行训练。

# 读入json文件
使用以下代码读取params_small.json文件，将模型和训练的参数传给basenji_train.py的params变量
	  
```python
 with open(params_file) as params_open:
   params = json.load(params_open)
 params_model = params['model'] # model参数也是一个字典
 params_train = params['train']# train参数也是一个字典
```
params_model内容如下：
（其中trunk字典是模型每一层结构的参数，后面将被设置为seqnn_model实例的属性）


	"model": {
        "seq_length": 131072,
        "target_length": 1024,

        "augment_rc": true,
        "augment_shift": 3,

        "activation": "gelu",
        "batch_norm": true,
        "bn_momentum": 0.9,

        "trunk": [
            {
                "name": "conv_block",
                "filters": 64,
                "kernel_size": 15,
                "pool_size": 8
            },
            {
                "name": "conv_tower",
                "filters_init": 64,
                "filters_mult": 1.125,
                "kernel_size": 5,
                "pool_size": 4,
                "repeat": 2
            },
            {
                "name": "dilated_residual",
                "filters": 32,
                "rate_mult": 2,
                "repeat": 6,
                "dropout": 0.25
            },
            {
                "name": "conv_block",
                "filters": 64,
                "dropout": 0.05
            }
        ],
        "head": {
            "name": "dense",
            "units": 3,
            "activation": "softplus"
        }
    }

# 构建模型seqnn_model

接下来将`params_model`传递给`seqnn.SeqNN`来构建模型，所用命令如下：

```python
seqnn_model = seqnn.SeqNN(params_model) # line：104
# seqnn_model的属性包含params_model中的参数，
# 此外可以用seqnn_model.model.summary()查看模型的信息。
```

该类存放于`seqnn.py`文件中，其方法有：
1.  __init__
```python
  def __init__(self, params):
    self.set_defaults()
    for key, value in params.items():
      self.__setattr__(key, value) # 将params里的属性设置为该类的实例
    self.build_model()
    self.ensemble = None
    self.embed = None
```
params参数即params_model字典，该构造函数将params_model中的键值对设置成seqnn_model实例的属性。

2. **build_blocks**：
		`def build_block(self, current, block_params)`
		参数1：current，即输入，由tf.keras.Input生成，并不带有实际的数据，
		参数2：block_params，字典形式，即params_model['trunk']字典，这里面存放的是对模型的每一层的参数定义
		功能：使用blocks.py中所定义的block（即卷积，全连接等操作）来对输入进行操作，并返回一个current
3. **build_model**：	
		`def build_model(self, save_reprs=False)`
		该函数依次读取self.trunk中的参数，然后调用build_block函数构建对应的网络结构。
	

# 构建seqnn_trainer
```python
seqnn_trainer = trainer.Trainer(params_train, train_data, eval_data, options.out_dir)
```


# 编译并训练模型

代码如下所示：

```python
seqnn_trainer.compile(seqnn_model) 
seqnn_trainer.fit(seqnn_model)
```

