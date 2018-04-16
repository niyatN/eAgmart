import React from 'react';
import ReactDOM from 'react-dom';
import Signin from'./component/signin';
import Signup from'./component/signup';

import Dashboard from'./component/dashboard';
import App from './App';
import { Router,Route,browserHistory } from 'react-router';
//import createHistory from 'history/createBrowserHistory';
import {firebaseApp} from './firebase';


firebaseApp.auth().onAuthStateChanged(user=>{
  if(user){
    console.log('User sign in or up',user);
    browserHistory.replace('/dashboard');
  }
  else {
    console.log('User sign out');
    browserHistory.replace('/home');
  }
}
)

ReactDOM.render(
  <Router path="/" history={browserHistory} >
    <Route path="/home" component={App} />
    
    <Route path="/signin" component={Signin} />
    <Route path="/signup" component={Signup} />
    <Route path ="/dashboard" component={Dashboard} />
  </Router>
  ,document.getElementById('root')
);
