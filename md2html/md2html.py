# -*- coding: utf-8 -*-
"""
Created on Sat May 30 11:25:57 2020

@author: asus
"""

import os
#import markdown
import codecs

head = '''
<?php 
	$page_title = "{}";
	include "../notes_header.php";
?>
	
	<div class="main">

    '''

tail = '''
    </div>
    </body>
    </html>
    '''

def md_to_html(file_name, file_path):
    in_file = file_path + '/%s.md' % (file_name)
    out_file = file_path + '/%s.php' % (file_name)
    print('converting file {} to {}'.format(in_file, out_file))

    os.system('pandoc {} -o {}'.format(in_file, out_file))

    with open(out_file, 'r+', encoding = 'utf-8') as ifl:
        html1 = ifl.read()
    
    #input_file = codecs.open(in_file, mode="r", encoding="utf-8")
    #text = input_file.read()
    #html2 = markdown.markdown(text)
        
    html1 = head.format(file_name) + html1 + tail
    with open(out_file, 'w', encoding = 'utf-8') as ofl:
        ofl.write(html1)

file_path = './python_notes'
# linux_notes r_notes python_notes
files = os.listdir(file_path)
print(files)
# files = ['awk基本用法、解决特定问题的用法.md']

for file in files:
    if file.endswith('.md'):
        md_to_html(file.rstrip('.md'), file_path)

# in_file = 'Conda常用命令.md'
# input_file = codecs.open(in_file, mode="r", encoding="utf-8")
# text = input_file.read()
# html = markdown.markdown(text)


# 另外一种方法
'''
css = 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!-- 此处省略掉markdown的css样式，因为太长了 -->
</style>


def main(argv):
    name = argv[0]
    in_file = '%s.md' % (name)
    out_file = '%s.html' % (name)

    input_file = codecs.open(in_file, mode="r", encoding="utf-8")
    text = input_file.read()
    html = markdown.markdown(text)

    output_file = codecs.open(out_file, "w",encoding="utf-8",errors="xmlcharrefreplace")
    output_file.write(css+html)

if __name__ == "__main__":
   main(sys.argv[1:])
'''