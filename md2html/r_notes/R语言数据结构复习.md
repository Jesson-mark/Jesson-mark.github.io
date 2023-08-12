
## factor生成因子
函数factor()用来把一个向量编码为一个因子


## gl生成因子
gl(n,k,length=n*k,labels=1:n,odered=FALSE)
n为水平数， k为重复的次数， length为结果的长度， labels为n维向量，表示因子水平， ordered是逻辑变量，表示是否为有序因子，缺省值FALSE
`gl(2,3) gl(2,1,6)`
		结果为
![在这里插入图片描述](https://img-blog.csdnimg.cn/20200530184413742.png)
## rep重复向量
rep(1:4, c(2,1,2,1))
rep(1:4, each = 2, len = 4)    # each表示每一个子元素连续重复两次，结果仅有4个元素，为1 1 2 2
rep(1:4, each = 2, times = 3)  # length 24, 3 complete replications
#times表示前面的整体重复3次，结果为 1 1 2 2 3 3 4 4 1 1 2 2 3 3 4 4 1 1 2 2 3 3 4 4

## 矩阵或数据框对每一列或每一行求和或求平均
colSums (x, na.rm = FALSE, dims = 1)
rowSums (x, na.rm = FALSE, dims = 1)
colMeans(x, na.rm = FALSE, dims = 1)
rowMeans(x, na.rm = FALSE, dims = 1)

## 矩阵上下三角操作
lower.tri(x, diag = FALSE)
upper.tri(x, diag = FALSE)
返回和矩阵大小一样的逻辑矩阵，其中上三角或下三角为TRUE

