#!/usr/bin/python
# -*- coding: UTF-8 -*-

# list = ["hello",123,100.00,"world","python"]
# tinylist = ["1245","world"]

# print list
# print list[0]
# print list[1:3]
list = [ 'runoob', 786 , 2.23, 'john', 70.2 ]
tinylist = [123, 'john']
 
print list               # 输出完整列表
print list[0]            # 输出列表的第一个元素
print list[1:3]          # 输出第二个至第三个的元素 
print list[2:]           # 输出从第三个开始至列表末尾的所有元素
print tinylist * 2       # 输出列表两次
print list + tinylist    # 打印组合的列表
tuple = ( 'runoob', 786 , 2.23, 'john', 70.2 )
tinytuple = (123, 'john')
 
print tuple               # 输出完整元组
print tuple[0]            # 输出元组的第一个元素
print tuple[1:3]          # 输出第二个至第三个的元素 
print tuple[2:]           # 输出从第三个开始至列表末尾的所有元素
print tinytuple * 2       # 输出元组两次
print tuple + tinytuple   # 打印组合的元组
#以上实例输出结果：
# ('runoob', 786, 2.23, 'john', 70.2)
# runoob
# (786, 2.23)
# (2.23, 'john', 70.2)
# (123, 'john', 123, 'john')
# ('runoob', 786, 2.23, 'john', 70.2, 123, 'john')
# 以下是元组无效的，因为元组是不允许更新的。而列表是允许更新的：
# 实例(Python 2.0+)
 
# tuple = ( 'runoob', 786 , 2.23, 'john', 70.2 )
# list = [ 'runoob', 786 , 2.23, 'john', 70.2 ]
# tuple[2] = 1000    # 元组中是非法应用
# list[2] = 1000     # 列表中是合法应用