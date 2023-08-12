
# 数值运算 

```powershell
a=3 
b=\`expr $a + 10\` 
echo $b 
```

# 输出内容带行号 
1. `cat a.txt |wc -l`：统计行数 
2. `cat -n a.txt `：输出的每一行前面会带上行号
3. `nl a.txt`：`nl`相当于`cat -n` 
4. `grep -n string a.txt`：输出字符串string所在的行，前面会带上行号。

# 删除空白行 
在vi中删除空白行：`:g/^\s*$/d`，\s*表示空白字符 
在awk中删除空白行
1. `awk '\$0 !~ /^\$/' a.txt `
2. `awk 'NF > 0' a.txt `

	参考[该博客](https://blog.csdn.net/Eliza1130/article/details/23427385)



# grep搜索带减号减号-的内容 
"-"在shell中是option的前缀符号，即便被放入单引号中, 也会提示报错
**解决方法**： `grep - - "-1"` 或 `grep -e "-1"`

（本文会不定期更新）
