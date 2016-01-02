import cgi,cgitb,os,Cookie,MySQLdb
class Login:
	def login(self,user,password):
		db = MySQLdb.connect("127.0.0.1","root","akshat123","eshop")
		cursor = db.cursor()
		cursor.execute("select * from users where user='%s'" % user)
		result = cursor.fetchall()
		check = 'f'
		for row in result:
			if row[2] == password :
				check = 't'
			else:
				check = 'f'
		if check == 't':
			c = Cookie.SimpleCookie()
			c["eshop"] = user
			print c
			print "Location: index.php\r\n"
		else:
			print "Location: login.py?err=t\r\n"
		db.close()
