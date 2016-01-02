import auth,cgi,cgitb
form = cgi.FieldStorage()
user = form.getvalue("user")
password = form.getvalue("pass")
name = form.getvalue("name")
register1 = auth.Register()
register1.register(user,password,name)