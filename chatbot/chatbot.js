//links
//http://eloquentjavascript.net/09_regexp.html
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions


var messages = []; //array that hold the record of each string in chat
  var lastUserMessage = ""; //keeps track of the most recent input string from the user
  var botMessage = ""; //var keeps track of what the chatbot is going to say
  var botName = 'Jack The Bot'; //name of the chatbot
  talking = true; //when false the speach function doesn't work
//
//
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//edit this function to change what the chatbot says
function chatbotResponse() {
  talking = true;
  botMessage = "I'm confused"; //the default message

if (lastUserMessage =='what is faang' || lastUserMessage =='FAANG' || lastUserMessage=='faang'){
  botMessage ="Top 5 companies to invest in Facebook Apple Amazon Netflix and Google";
} else if (lastUserMessage == 'etf' || lastUserMessage =='ETF' || lastUserMessage=="what is etf") {
  botMessage = 'exchange trade fund of different stocks';
}else if (lastUserMessage == 'name') {
  botMessage = 'My name is ' + botName + ' and I will try to answer your questions';
}else if (lastUserMessage == 'eps' || lastUserMessage=='EPS') {
  botMessage = 'Earning Per Share';
}else if (lastUserMessage=='create account') {
  botMessage= 'You can create a account by going to our' + '<a href="../signup.html"> signup page</a>' ;
}else if (lastUserMessage =='S&P 500' || lastUserMessage=='what is the s&p500' || lastUserMessage=='s&p500') {
  botMessage ='The top 500 companies in the USA stock market, we recommend using the Vanguard Ishares or invesco ETf for this';
}else if (lastUserMessage == 'FTSE' || lastUserMessage=='ftse' || lastUserMessage =='what is the FTSE' || lastUserMessage == 'what is the ftse') {
  botMessage ='The FTSE tracks the UK stock market and comes under ftse 100 or 250';
}else if (lastUserMessage == 'P/E ratio' || lastUserMessage =='pe ratio' || lastUserMessage =='') {
  botMessage ='This can tell you if a stock is under or over valued';
}else if (lastUserMessage=='dividend yeild' || lastUserMessage== 'DY' || lastUserMessage =='dy') {
  botMessage ='The percentage a company will give you in return for being a shareholder';
}else if (lastUserMessage =='dividend') {
  botMessage= 'check how much you will be paid by using this' + '<a href="https://www.dividendmax.com/" target="_blank"> dividend</a>' +' website';
}else if (lastUserMessage =='small cap' || lastUserMessage =='sc' || lastUserMessage == 'SC') {
  botMessage = 'Companies which are valued under 1 billion';
}else if (lastUserMessage == 'EM' || lastUserMessage=='emerging market') {
  botMessage ='Companies which come from developing countries';
}else if (lastUserMessage=='Nasdaq' || lastUserMessage=='nasdaq' || lastUserMessage=='NASDAQ' || lastUserMessage=='DOW' || lastUserMessage=='CAC' || lastUserMessage=='DAX' || lastUserMessage=='dax') {
  botMessage ='index trackers which help to track the market';
}
else {
  botMessage = "I'm confused"; //the default message
}
}
/*if (lastUserMessage == 'hi' || lastUserMessage =='hello') {
    const hi = ['hi','howdy','hello'];
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  } else if (lastUserMessage == 'name') {
    botMessage = 'My name is ' + botName;
  } else {
    botMessage = "Please try again";
  }*/
  //if (lastUserMessage === 'faang') {
    //botMessage ="Top 5 companies you should have in your portfolio
    //facebook apple amazon netflix goole";
//  }
//}
/*
if (lastUserMessage == 'hi' || lastUserMessage =='hello') {
  const hi = ['hi','howdy','hello'];
  botMessage = hi[Math.floor(Math.random()*(hi.length))];
}else if (lastUserMessage == 'name') {
  botMessage = 'My name is ' + botName;
}else if (lastUserMessage == 'faang') {
  botMessage ="Top 5 companies you should have in your portfolio
  facebook apple amazon netflix goole";
}else {
  botMessage = "I'm confused";
}

}*/
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//
//
//
//this runs each time enter is pressed.
//It controls the overall input and output
function newEntry() {
  //if the message from the user isn't empty then run
if (document.getElementById("chatbox").value !== "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    messages.push(lastUserMessage);
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
    //add the chatbot's name and message to the array messages
    messages.push("<b>" + botName + ":</b> " + botMessage);
    // says the message using the text to speech function written below
    Speech(botMessage);
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 200; i++) {//8
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
  }
}

//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {
  if ('speechSynthesis' in window && talking) {
    var utterance = new SpeechSynthesisUtterance(say);
    //msg.voice = voices[10]; // Note: some voices don't support altering params
    //msg.voiceURI = 'native';
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 0.1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = 'Hello World';
    //utterance.lang = 'en-US';
    speechSynthesis.speak(utterance);
  }
}

//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is 'enter' runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  if (key == 38) {
    console.log('hi')
      //document.getElementById("chatbox").value = lastUserMessage;
  }
}

//clears the placeholder text ion the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}
