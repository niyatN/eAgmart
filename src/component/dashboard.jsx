import React ,{Component } from 'react';
import {Form,Image,FormControl,Grid,Row,Col,Button,Table} from 'react-bootstrap';

import {firebaseApp} from '../firebase';
import '../css/dashboard.css';
class Dashboard extends Component{

  constructor(props){
    super(props);
    this.state={
      username:'',
      name:'',
      address:'',
      pinCode:'',
      contact:'',
      produce:'',
      quantity:'',
      cropStage:'',
      dateOfH:'',
      pendingReq:[],

    }
    this.handleSubmit = this.handleSubmit.bind(this);
  }
  signOut(){
    firebaseApp.auth().signOut();
  }
  handleSubmit(e) {
    console.log("s",this.state);
    const reqRef = firebaseApp.database().ref('req');
    const request = {
      username:this.state.username,
      name:this.state.name,
      address:this.state.address,
      pinCode:this.state.pinCode,
      contact:this.state.contact,
      produce:this.state.produce,
      quantity:this.state.quantity,
      cropStage:this.state.cropStage,
      dateOfH:this.state.dateOfH
    }
    reqRef.push(request);
    this.setState({
      username:'',
      name:'',
      address:'',
      pinCode:'',
      contact:'',
      produce:'',
      quantity:'',
      cropStage:'',
      dateOfH:''
    });
  }

  componentDidMount() {
    const reqRef = firebaseApp.database().ref('req');
    reqRef.on('value', (request) => {
      let req = request.val();
      let newState = [];
      for (let r in req) {
        newState.push({
          id:r,
          username:req[r].username,
          name:req[r].name,
          address:req[r].address,
          pinCode:req[r].pinCode,
          contact:req[r].contact,
          produce:req[r].produce,
          quantity:req[r].quantity,
          cropStage:req[r].cropStage,
          dateOfH:req[r].dateOfH

        });
      }
      this.setState({
        pendingReq:newState

      });
    });
  }
  changeFlag(){
    this.setState({flag:1});
  }
  removeRequest(i){
    const reqRef = firebaseApp.database().ref(`/req/${i}`);
    reqRef.remove();

  }



  render(){
    return(
      <div className = "App">
        <Row className="show-grid1">
        <Col xs={6}>
          <Image src={require('../css/Logo.png')} alt="hhh" />
          <h1 className="heading1">Welcom to eAgmart</h1>
          </Col>
        <Col xs={6}>
        <Button
          className="btn btn-danger"
          onClick={()=>this.signOut()}
          >Sign out
        </Button>
      </Col>
      </Row>
        <div>
        <Grid>
          <Row className="show-grid">

            <Col xs={8} className>
              <Table striped bordered condensed>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Produce</th>
                      <th>Quantity</th>
                      <th>Contact</th>
                      <th>Deal</th>
                    </tr>
                  </thead>
                  <tbody>

                  {this.state.pendingReq.map((i) => {
                    return (

                            <tr key={i.id}>
                              <td>{i.name}</td>
                              <td>{i.produce}</td>
                              <td>{i.quantity}</td>
                              <td>{i.contact}</td>
                              <td><Button className="btn btn-success"onClick={()=>this.removeRequest(i.id)}>Deal Done</Button></td>
                            </tr>

                    )
                  })}
                </tbody>
                </Table>
            </Col>
            <Col xs={4}  className="signForm">
              <h1></h1>
              <h2>Make  Request</h2>
              <Form>
                <FormControl type="text" placeholder="Username"
                  onChange = {event=>this.setState({username:event.target.value})}
                  />
                <br/>
                <FormControl type="text" placeholder="Full name"
                  onChange = {event=>this.setState({name:event.target.value})}
                  />
                <br/>
                <FormControl type="text" placeholder="address"
                  onChange = {event=>this.setState({address:event.target.value})}
                  />
                <br/>
                <FormControl type="text" placeholder="Pin Code"
                  onChange = {event=>this.setState({pinCode:event.target.value})}
                  />
                <br/>
                <FormControl type="text" placeholder="Contact"
                  onChange = {event=>this.setState({contact:event.target.value})}
                  />
                <br/>
                  <FormControl type="text" placeholder="produce"
                    onChange = {event=>this.setState({produce:event.target.value})}
                    />
                  <br/>
                  <FormControl type="text" placeholder="quantity(In Kg)"
                    onChange = {event=>this.setState({quantity:event.target.value})}
                    />
                  <br/>
                  <FormControl type="text" placeholder="Crop Stage"
                    onChange = {event=>this.setState({cropStage:event.target.value})}
                    />
                  <br/>
                  <FormControl type="date" placeholder="Date of harvest"
                    onChange = {event=>this.setState({dateOfH:event.target.value})}
                    />
                  <br/>

                <Button className="submitButton"
                  onClick = {()=>this.handleSubmit()}>Submit</Button>
                <br/>
              </Form><br/>


            </Col>




          </Row>
        </Grid>
      </div>

      </div>
    )
  }

}
export default Dashboard;
