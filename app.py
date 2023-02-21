from flask import Flask , render_template , session , request,logging
from flask_wtf import FlaskForm
import pickle
import flask
import pandas as pd


with open(f'nn.pkl', 'rb') as f:
    model = pickle.load(f)


app = Flask(__name__ )


@app.route('/')
def index():
     return render_template('home.html')

@app.route('/info')
def info():
     return render_template('info.html')


@app.route('/login', methods=["GET"])
def login():
     return render_template('login.php')

@app.route('/homelog')
def homelog():
     return render_template('homelog.html')




@app.route('/inserisciDati', methods=["GET"])
def inserisci():
     return render_template('data_insert.php')


@app.route('/inserisciDati', methods=['POST'] )
def inserisciD():
          age = request.form.get("eta")
          job = request.form.get("job")
          state = request.form.get("state")
          title = request.form.get("title")
          deff = request.form.get("deff")
          abitation = request.form.get("abitation")
          load = request.form.get("laod")
          tel = request.form.get("tel")
          mouth = request.form.get("mouth")
          day = request.form.get("day")
          durata = request.form.get("durata")
          comp = request.form.get("comp")
          gpag = request.form.get("gpag" )
          prev = request.form.get("prev")
          pout = request.form.get("pout")
          emp = request.form.get("emp")
          cprice = request.form.get("cprice")
          cconf = request.form.get("cconf")
          eur = request.form.get("eur")
          nr = request.form.get("nr")
          print(age,job,state,title,deff,abitation,load,tel,mouth,day,durata,comp,gpag,prev,pout,emp,cprice,cconf,eur,nr)
          input_variables = pd.DataFrame([[age,job,state,title,deff,abitation,load,tel,mouth,day,durata,comp,gpag,prev,pout,emp,cprice,cconf,eur,nr]], columns=['age','job','state','title','deff', 'abitation','load','tel','mouth','day','durata','comp','gpag','prev','pout','emp','cprice','cconf','eur','nr'], dtype=float, index=['input'])
          prediction = model.predict(input_variables) [0]
          if prediction==0:
               pred = 'Il cliente non sottoscriverà un deposito a termine'
          else:
               pred = 'Il cliente sottoscriverà un deposito a termine'
          proba = model.predict_proba(input_variables) [0]
          return flask.render_template('risultati.php',
                                             original_input={
                                                 'eta': age,
                                                 'job': job,
                                                 'state':state,
                                                 'title': title,
                                                 'deff': deff,
                                                 'abitation': abitation,
                                                 'load':load,
                                                 'tel':tel,
                                                 'mouth':mouth,
                                                 'day':day,
                                                 'durata':durata,
                                                 'comp':comp,
                                                 'gpag':gpag,
                                                 'prev':prev,
                                                 'pout':pout,
                                                 'emp': emp,
                                                 'cprice': cprice,
                                                 'cconf':cconf,
                                                 'eur': eur,
                                                 'nr':nr},
                                             result=pred,
                                             probability=proba)
                                             

               

@app.route('/visualizzaDati')
def dati():
     return flask.render_template('dataView.php')


@app.route('/modifica')
def mod():
     return flask.render_template('modifica.php')

@app.route('/modifica', methods=['POST'])
def modifica():
     age = request.form.get("et"),
     job = request.form.get("jo"),
     state = request.form.get("maritia"),
     title = request.form.get('ed'),
     deff = request.form.get("deff"),
     abitation = request.form.get("housin"),
     load = request.form.get("loa"),
     tel = request.form.get("contac"),
     mouth = request.form.get("mont"),
     day = request.form.get("da"),
     durata = request.form.get("duration"),
     comp =  request.form.get("compaign"),
     gpag = request.form.get("pay"),
     pre = request.form.get("pre"),
     pout = request.form.get("pout"),
     emp = request.form.get("emp"),
     cprice = request.form.get("consp"),
     cconf = request.form.get("consc"),
     eur = request.form.get("eu"),
     nr = request.form.get("nr"),
     input_variables = pd.DataFrame([age,job,state,title,abitation,load,tel,mouth,day,durata,comp,gpag,pre,pout,emp,cprice,cconf,eur,nr], columns=['age','job','state','title','deff','abitation','load','tel','mouth','day','durata','comp','gpag','pre','pout','emp','cprice','cconf','eur','nr'], dtype=float, index=['input'])
     prediction = model.predict(input_variables)[0]
     if prediction==0:
          pred = 'Il cliente non sottoscriverà un deposito a termine'
     else:
          pred = 'Il cliente sottoscriverà un deposito a termine'
     proba = model.predict(input_variables)[0]
     return flask.render_template('modifica.php', original_input ={
                                                  'eta': age,
                                                 'job': job,
                                                 'state':state,
                                                 'title': title,
                                                 'deff': deff,
                                                 'abitation': abitation,
                                                 'load':load,
                                                 'tel':tel,
                                                 'mouth':mouth,
                                                 'day':day,
                                                 'durata':durata,
                                                 'comp':comp,
                                                 'gpag':gpag,
                                                 'pre':pre,
                                                 'pout':pout,
                                                 'emp':emp,
                                                 'cprice': cprice,
                                                 'cconf':cconf,
                                                 'eur': eur,
                                                 'nr':nr,},
                                                  result=pred,
                                                  probability=proba)



@app.route('/forgot')
def forgot():
     return render_template('forgot.html')

@app.route('/register', methods=["GET"])
def register():
     return render_template('register.php')

@app.route('/forgotf')
def forgotf():
     return render_template('password.html')

@app.route('/risultati')
def risultati():
     return flask.render_template('risultati.php')




if __name__ == '__main__':
     app.run(debug=True)

