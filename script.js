
// Initialising variables outside

const text=document.getElementById("quote");
const author=document.getElementById("author");
const tweetButton=document.getElementById("tweet");

const getNewQuote = async () =>
{
    // This is the link to the API of inspirational quotes

    var url="https://type.fit/api/quotes";    

    // Fetching the data from the API 

    const response=await fetch(url);
    console.log(typeof response);

    //Storing it into an array of quotes

    const allQuotes = await response.json();

    // This generates a random number between 0 and the length of the array which allows for new random quotes
    
    const indx = Math.floor(Math.random()*allQuotes.length);

    //This stores the quote at the randomly generated index from the previous step

    const quote=allQuotes[indx].text;
    
    //This stores the author to the correct quote

    const auth=allQuotes[indx].author;

    if(auth==null)
    {
        author = "Unknown";
    }
 
    //This function displays the quote and the author to the user

    text.innerHTML=quote;
    author.innerHTML="~ "+auth;

    //This directs user to a Twitter page to tweet the specific quote displayed

    tweetButton.href="https://twitter.com/intent/tweet?text="+quote+" ~ "+auth;

}

getNewQuote();