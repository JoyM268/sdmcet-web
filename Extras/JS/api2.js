//API Example 2
const URL = "https://cat-fact.herokuapp.com/facts";

(() => {
    fetch(URL).then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data[0].text);
    });
})();