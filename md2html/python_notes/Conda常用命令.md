

# 在虚拟环境下安装spyder
安装spyder：在某个环境中输入`conda install spyder`，即可安装spyder。
更新spyder：`conda update spyder`

# Spyder中快捷键
clear，或Ctrl + L #清空控制台上的书写记录
reset,在确定提示中输入y #spyder清除变量赋值

# 虚拟环境管理
1. 创建虚拟环境：conda create/remove --name 名字 python=3.5
2. 查看当前存在哪些虚拟环境：conda info -e 或者conda env list 
3. 查看安装了哪些包：conda list
4. 检查更新当前conda：conda upgrade conda 
5. 重命名虚拟环境：conda 其实没有重命名指令，实现重命名是通过 clone 完成的，分两步：
• 先 clone 一份 new name 的环境 ：conda create -n tf --clone rc #将环境rc克隆为tf
• 删除 old name 的环境 conda remove -n rc --all

# 使用conda安装TensorFlow   
安装最新版本的TensorFlow
1. `conda install -c anaconda tensorflow `
2. `conda install --channel https://conda.anaconda.org/anaconda tensorflow=1.10.0`

查看当前有哪些可以使用的tensorflow版本：
`conda search --full --name tensorflow`
# 镜像操作
1. 显示当前镜像：`conda config --show channels`
2. 删除镜像：`conda config --remove channels http:...`
3. 添加镜像：`conda config --add channels http:`

