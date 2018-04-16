import React ,{Component } from 'react';
import {Form,FormControl,Grid,Row,Col,Button} from 'react-bootstrap';
import {firebaseApp} from '../firebase';
import '../css/signup.css';
import {Link } from 'react-router';
class Signup extends Component{
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
  signUp(){
    console.log('this.state',this.state);
    const {email,password} = this.state;
    firebaseApp.auth().createUserWithEmailAndPassword(email,password)
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

            <h2>Sign up</h2>
            <Form>
              <FormControl type="text" placeholder="First Name" />
              <br/>
              <FormControl type="text" placeholder="Last Name" />
              <br/>
              <FormControl type="text" placeholder="Username" />
              <br/>
              <FormControl type="text" placeholder="Email"
                onChange = {event=>this.setState({email:event.target.value})}
                />
              <br/>
              <FormControl type="password" placeholder="Password"
                onChange = {event=>this.setState({password:event.target.value})}
                />
              <br/>
              <FormControl type="password" placeholder="Re-type password" />
              <br/>
              <FormControl type="text" placeholder="Contact" />
              <br/>
              <Button className="submitButton"
                onClick = {()=>this.signUp()}>Submit</Button>
              <br/>
            </Form><br/>
            <Link to="/signin"><Button className="submitButton">Already registered?</Button></Link>
            <div>{this.state.error.message}</div>
          </Col>
        </Row>
      </Grid>
    </div>

    )
  }
}
export default Signup;
