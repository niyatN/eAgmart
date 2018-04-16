import React ,{Component } from 'react';
import Signin from'./component/signin';
import Signup from'./component/signup';
import {Link} from 'react-router';
import {Button} from 'react-bootstrap';

class App extends Component{
  render(){
    return(
      <div className = "App">
        <Link to="/"><Button>Home</Button></Link>
        <Link to="/signin"><Button>Signin</Button></Link>
        <Link to="/signup"><Button>Signup</Button></Link>
      </div>
    )
  }

}
export default App;
