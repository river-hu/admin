#!/usr/bin/python
# -*- coding: UTF-8 -*-

#运算符

# Python算术运算符
# 以下假设变量： a=10，b=20：
# 运算符	描述	实例
# +	加 - 两个对象相加	a + b 输出结果 30
# -	减 - 得到负数或是一个数减去另一个数	a - b 输出结果 -10
# *	乘 - 两个数相乘或是返回一个被重复若干次的字符串	a * b 输出结果 200
# /	除 - x除以y	b / a 输出结果 2
# %	取模 - 返回除法的余数	b % a 输出结果 0
# **	幂 - 返回x的y次幂	a**b 为10的20次方， 输出结果 100000000000000000000
# //	取整除 - 返回商的整数部分	9//2 输出结果 4 , 9.0//2.0 输出结果 4.0
a = 21
b = 10
c = 0
 
if ( a == b ):
   print "1 - a 等于 b"
else:
   print "1 - a 不等于 b"
 
if ( a != b ):
   print "2 - a 不等于 b"
else:
   print "2 - a 等于 b"
 
if ( a <> b ):
   print "3 - a 不等于 b"
else:
   print "3 - a 等于 b"
 
if ( a < b ):
   print "4 - a 小于 b" 
else:
   print "4 - a 大于等于 b"
 
if ( a > b ):
   print "5 - a 大于 b"
else:
   print "5 - a 小于等于 b"
 
# 修改变量 a 和 b 的值
a = 5
b = 20
if ( a <= b ):
   print "6 - a 小于等于 b"
else:
   print "6 - a 大于  b"
 
if ( b >= a ):
   print "7 - b 大于等于 a"
else:
   print "7 - b 小于 a"
# Python赋值运算符
# 以下假设变量a为10，变量b为20：
# 运算符	描述	实例
# =	简单的赋值运算符	c = a + b 将 a + b 的运算结果赋值为 c
# +=	加法赋值运算符	c += a 等效于 c = c + a
# -=	减法赋值运算符	c -= a 等效于 c = c - a
# *=	乘法赋值运算符	c *= a 等效于 c = c * a
# /=	除法赋值运算符	c /= a 等效于 c = c / a
# %=	取模赋值运算符	c %= a 等效于 c = c % a
# **=	幂赋值运算符	c **= a 等效于 c = c ** a
# //=	取整除赋值运算符	c //= a 等效于 c = c // a
# Python位运算符

# a = 0011 1100

# b = 0000 1101

# -----------------

# a&b = 0000 1100

# a|b = 0011 1101

# a^b = 0011 0001

# ~a  = 1100 0011

# Python成员运算符
# 除了以上的一些运算符之外，Python还支持成员运算符，测试实例中包含了一系列的成员，包括字符串，列表或元组。
# 运算符	描述	实例
# in	如果在指定的序列中找到值返回 True，否则返回 False。	x 在 y 序列中 , 如果 x 在 y 序列中返回 True。
# not in	如果在指定的序列中没有找到值返回 True，否则返回 False。	x 不在 y 序列中 , 如果 x 不在 y 序列中返回 True。
# 以下实例演示了Python所有成员运算符的操作：
# 实例(Python 2.0+)
# #!/usr/bin/python
# # -*- coding: UTF-8 -*-
 
# a = 10
# b = 20
# list = [1, 2, 3, 4, 5 ];
 
# if ( a in list ):
#    print "1 - 变量 a 在给定的列表中 list 中"
# else:
#    print "1 - 变量 a 不在给定的列表中 list 中"
 
# if ( b not in list ):
#    print "2 - 变量 b 不在给定的列表中 list 中"
# else:
#    print "2 - 变量 b 在给定的列表中 list 中"
 
# # 修改变量 a 的值
# a = 2
# if ( a in list ):
#    print "3 - 变量 a 在给定的列表中 list 中"
# else:
#    print "3 - 变量 a 不在给定的列表中 list 中"
# 以上实例输出结果：
# 1 - 变量 a 不在给定的列表中 list 中
# 2 - 变量 b 不在给定的列表中 list 中
# 3 - 变量 a 在给定的列表中 list 中