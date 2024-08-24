//API Example 1
const URL = "https://cat-fact.herokuapp.com/facts";

(async() => {
    let response = await fetch(URL);
    let data = await response.json();
    console.log(data[0].text);
})();