# eval
### 1. 使用形式
eval(source, [globals, [locals]])    
### 2. 作用
求表达式的值，可以计算以字符串形式或代码对象给定的Python**表达式**的值，并返回该值；

### 3. 参数说明
globals和locals参数是可选的名字空间（作用域Scope），默认作用域是当前名称空间中的变量。
### 4. 使用示例：

```python
eval('3+4') #返回7
ascope={'x':3,'y':2};  eval('x**y',ascope) #将会返回3**2，即9
eval('list(map(lambda x:x**2,[3,4]))')  # 返回[9, 16]
```

# exec
### 1. 使用形式
exec(source, [globals, [locals]])   
### 2. 作用
可以执行以字符串形式或代码对象给定的Python**语句**，没有任何返回值。
注意该函数与eval函数的区别：eval函数的source参数是一个python表达式，而exec函数的source参数是一个python语句。
关于语句与表达式的区别可以参考我的上一篇文章[Python基础知识](https://blog.csdn.net/weixin_44843824/article/details/106581206)

### 3. 参数说明
globals和locals参数是可选的名字空间（作用域Scope），用法同eval中的参数。
### 4. 使用示例：
```python
exec('3+4') #不会输出
exec('print(3+4)') #输出7
exec('f=lambda x:x\**2'); f(3) #输出9
ascope={'x':3,'y':2};  exec('print(x**y)',ascope) #将会返回3**2，即9
```

# eval, exec的实际用途
**作用**：可以动态生成代码、定义函数等。
f(x)=sin(x)+sin(2x)+sin(3x)+…+sin(99x) ; 求f(0)+f(1)+f(2)+…+f(99)

**代码如下**：
1. exec实现：
```python
from math import sin
funlst = []
for i in range(1,100):
    exec('def sin_{}(x):return sin({}*x)'.format(i,i))
    funlst.append(eval('sin_{}'.format(i)))

result = [sum(map(lambda y: y(i), funlst)) for i in range(100)]

```
2. eval实现

```python
from math import sin
funstr = 'sin(x)'
for i in range(2,100):
    funstr += '+sin({}*x)'.format(i)

result = map(lambda x:eval(funstr),range(100))
```

