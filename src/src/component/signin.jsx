import React ,{Component } from 'react';
import {Form,FormControl,Grid,Row,Col,Button} from 'react-bootstrap';
import {firebaseApp} from '../firebase';
import '../css/signin.css';
import {Link } from 'react-router';

class Signin extends Component{
  constructor(props){
    super(props);
    this.state = {
      email : '',
      password : '',
      error:{
        message:''
      }
    }
  }
  signIn(){
    console.log('this.state',this.state);
    const {email,password} = this.state;
    firebaseApp.auth().signInWithEmailAndPassword(email,password)
    .catch(error=>{
      this.setState({error:error})
    })
  }

  render(){
    return(
      <div>
      <Grid>
        <Row className="show-grid">
          <Col xs={4} xsOffset={4} className="signForm">
            <h1>Welcom to eAgmart</h1>
            <h2>Sign In</h2>
            <Form>

              <FormControl type="text" placeholder="Email"
                onChange = {event=>this.setState({email:event.target.value})}
                />
              <br/>
              <FormControl type="password" placeholder="Password"
                onChange = {event=>this.setState({password:event.target.value})}
                />
              <br/>

              <Button className="submitButton"
                onClick = {()=>this.signIn()}>Submit</Button>
              <br/>
            </Form><br/>

          <div><b><p className="text-danger">{this.state.error.message}</p></b></div>
          </Col>
        </Row>
      </Grid>
    </div>

    )
  }
}
export default Signin;
