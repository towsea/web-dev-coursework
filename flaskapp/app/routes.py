import os
from flask import Flask, render_template
 
app = Flask(__name__)      
 
@app.route('/')
def home():
  return render_template('home.html')
 
@app.route('/about')
def about():
  return render_template('about.html')
 
if __name__ == '__main__':
  port = int(os.getenv('PORT', 8080))
  host = os.getenv('IP', '0.0.0.0')
  app.run(port=port, host=host)
 