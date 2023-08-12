# 简介
`scp`命令用来在不同的服务器之间传输文件，也可以在windows的linux子系统与服务器之间传输文件（此时`scp`命令要在子系统端运行）。

# 用法
## 1. 从对方服务器接收指定文件到本服务器
**用法**：`scp username@servername:/path/filename /var/www/local_dir`（本地目录） 
其中，`username`为对方服务器的用户名，`servername`是对方服务器的IP。
**举例**：`scp root@192.168.0.101:/var/www/test.txt /var/www/local_dir` 
**解释**：把192.168.0.101上的`/var/www/test.txt` 的文件下载到`/var/www/local_dir`（本地目录） 中。

## 2. 将本服务器的文件传给对方服务器
**用法**：`scp /path/filename username@servername:/path `
**举例**：`scp /var/source/test.php  root@192.168.0.101:/var/target/  `
**解释**：把本服务器`/var/source/`目录下的test.php文件上传到192.168.0.101这台服务器上的`/var/target/`目录中 

**用法简记**：scp后面参数有两个目录，会把第一个目录下的文件传输到第二个目录中。

## 3. 指定服务器端口
`scp  -P 端口名 /path/filename username@servername:/path ` 
