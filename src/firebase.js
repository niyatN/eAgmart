import * as firebase from 'firebase';
const config = {
  apiKey: "AIzaSyB9ZuvxWIk6HtNAjADordq11HIUbea-UgA",
  authDomain: "eagmart-a824a.firebaseapp.com",
  databaseURL: "https://eagmart-a824a.firebaseio.com",
  projectId: "eagmart-a824a",
  storageBucket: "eagmart-a824a.appspot.com",
  messagingSenderId: "1033036903732"
};

export const firebaseApp = firebase.initializeApp(config);
