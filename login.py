import cgi,cgitb,urllib2
form = cgi.FieldStorage()
err = form.getvalue("err")
print "Content-Type:text/html\r\n\r\n"

str = urllib2.urlopen('http://localhost/cgi-bin/eshop/head.html').read()

print str	


if err == 't':
	print "<div class='alert alert-warning>Bad Credentials....</div>'"

print """


	<div class='login'>
		<form action='loginpr.py' method='post'>
			<input type='text' name='user' class='form-control' placeholder='Enter Username'><br />
			<input type='password' name='pass' class='form-control' placeholder='Enter Password'><br />
			<button type='submit' class='btn btn-success'>Login</button>
			
		</form>
	</div>

"""