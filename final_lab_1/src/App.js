import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <html lang="en">
    <head>
      <meta charset="UTF-8"/>
      <title>Somadhan</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/log.css"/>
    
    </head>
    <body>
      <br/>
    <form method="POST">
    <div class="box-form">
      <div class="left">
        <div class="overlay">
        <h1>Soma dhan</h1>
        <p>Somadhan is your best companion for study. Access answers to all the question you might have. Live tutors to help you out. <br/>Join Today! </p>
        <span>
          <p>Visit our social media pages</p>
          <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
        </span>
        </div>
      </div>
      
      
        <div class="right">
        <h5>Login</h5>
        <p>Don't have an account? <a href="{{url('Register')}}">Create Your Account</a> it takes less than a minute</p>
        <div class="inputs">
          <input type="text" placeholder="email" name="email"/>
                 
        
          <input type="password" placeholder="password" name="pass"/>
                 
        </div>
          
          
        
          
          <button>Login</button>
      </div>
      
    </div>
    </form>
    </body>
    </html>
  );
}

export default App;
