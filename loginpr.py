import auth,cgi,cgitb
form = cgi.FieldStorage()
user = form.getvalue("user")
password = form.getvalue("pass")
login1 = auth.Login()
login1.login(user,password)