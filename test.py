# str=[
# "Vishnu Prakash",
# "Abraham Francis",
# "Adwaith T",
# "Srinivas R"]
# for name in str:
#     print("'third "+name+"',")

s = '3add6mul7div2' 
d = { 'add':'+', 'sub':'-', 'mul':'*', 'div':'/'}
for c in d:
    s = s.replace(c,d[c])
print(eval(s))