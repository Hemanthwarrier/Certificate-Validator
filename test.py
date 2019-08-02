# str=[
# "Vishnu Prakash",
# "Abraham Francis",
# "Adwaith T",
# "Srinivas R"]
# for name in str:
#     print("'third "+name+"',")

s = '3add6mul7div2' 
d = { 'add':'+', 'sub':'-', 'mul':'*', 'div':'/'}
print (''.join(d[c] if c in d else c for c in s))