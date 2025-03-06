from pyftpdlib.authorizers import DummyAuthorizer
from pyftpdlib.handlers import FTPHandler
from pyftpdlib.servers import FTPServer
import os

# Set the upload folder
upload_folder = "uploads"
if not os.path.exists(upload_folder):
    os.makedirs(upload_folder)

# Create an anonymous user with full permissions
authorizer = DummyAuthorizer()
authorizer.add_anonymous(os.path.abspath(upload_folder), perm='elradfmw')

handler = FTPHandler
handler.authorizer = authorizer

# Use port 2121 to avoid conflicts with PHP web server
server = FTPServer(("192.168.0.148", 2121), handler)
server.serve_forever()
