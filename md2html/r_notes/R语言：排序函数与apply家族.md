
# 三个排序函数
`sort(x)`：是对向量x进行排序，返回值排序后的数值向量。
`rank(x)`：是求秩的函数，它的返回值是这个向量中对应元素的“排名”。
`order(x)`：的返回值是对应“排名”的元素所在向量中的位置。
如order(c(1,5,2,0)) 返回4 1 3 2 表示第4个元素最小，第2个元素最大

# apply函数
1. `apply(X, MARGIN, FUN, ...)` MARGIN表示X的维度，若X为二维，MARGIN为1，表示对X按行（第一个维度）运用函数FUN，MARGIN为2表示对X按列（第二个维度）运用函数FUN，…表示要传入给函数FUN的参数

2. `tapply(X, INDEX, FUN = NULL, ..., default = NA, simplify = TRUE)`
 对X按照INDEX进行分组，在每一组内使用函数FUN，simplify=T时返回一个array（1维）

3. `lapply(X,FUN,...)`对向量应用函数， 返回结果为一个列表
4. `sapply`函数类似lapply函数，只是把结果变为向量 
	sapply(x,”[“,2)#提取列表中的第二个元素组成向量 
![在这里插入图片描述](https://img-blog.csdnimg.cn/20200530184914337.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3dlaXhpbl80NDg0MzgyNA==,size_16,color_FFFFFF,t_70)
> 上图来自[掌握R语言中的apply函数族](http://blog.fens.me/r-apply/)
