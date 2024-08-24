const playerRed = "R";
const playerYellow = "Y";
let currPlayer = playerRed;
let gameOver = false;
let board;
let currColumns = [];
const rows = 6;
const columns = 7;

window.onload = () => {
    createBoard();
}

function createBoard(){
    const restart = document.getElementById("restart-button");
    currColumns = [5, 5, 5, 5, 5, 5, 5];  
    board = [];
    for(let r = 0; r < rows; r++){
        let row = [];
        for(let c = 0; c < columns; c++){
            row.push(' ');
            let tile = document.createElement("div");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            tile.addEventListener("click", setPiece);
            document.getElementById("board").append(tile);
        }
        board.push(row);
    }
    restart.addEventListener("click", restartGame);
    document.getElementById("winner").innerText = "Current Player: Red";
}

function setPiece(){
    const curr = document.getElementById("winner");
    if(gameOver){
        return;
    }

    let coords = this.id.split("-");
    let r = parseInt(coords[0]);
    let c = parseInt(coords[1]);

    r = currColumns[c]
    if(r < 0){
        return
    }

    board[r][c] = currPlayer;
    const tile = document.getElementById(r.toString() + "-" + c.toString());
    if(currPlayer == playerRed){
        tile.classList.add("red-piece");
        currPlayer = playerYellow;
    }else{
        tile.classList.add("yellow-piece");
        currPlayer = playerRed;
    }
    r--;
    currColumns[c] = r;

    checkWinner();
    if(!gameOver){
        curr.innerText = "Current Player: " + (currPlayer == playerRed ? "Red" : "Yellow");
    }
}

function checkWinner(){
    for(let r = 0; r < rows; r++){
        for(let c = 0; c < columns - 3; c++){
            if(board[r][c] != " " && board[r][c] == board[r][c + 1] && board[r][c + 1] == board[r][c + 2] && board[r][c + 2] == board[r][c+ 3]){
                setWinner(r, c);
                return;
            }
        }
    }

    for(let c = 0; c < columns; c++){
        for(let r = 0; r < rows - 3; r++){
            if(board[r][c] != " " && board[r][c] == board[r + 1][c] && board[r + 1][c] == board[r + 2][c] && board[r + 2][c] == board[r + 3][c]){
                setWinner(r, c);
                return;
            }
        }
    }

    for(let r = 0; r < rows - 3; r++){
        for(let c = 0; c < columns - 3; c++){
            if(board[r][c] != " " && board[r][c] == board[r + 1][c + 1] && board[r + 1][c + 1] == board[r + 2][c + 2] && board[r + 2][c + 2] == board[r + 3][c + 3] ){
                setWinner(r, c);
                return;
            }
        }
    }

    for(r = 3; r < rows; r++){
        for(c = 0; c < columns - 3; c++){
            if(board[r][c] != " " && board[r][c] == board[r - 1][c + 1] && board[r - 1][c + 1] == board[r - 2][c + 2] && board[r - 2][c + 2] == board[r - 3][c + 3]){
                setWinner(r, c);
                return;
            }
        }
    }
}

function setWinner(r, c){
    const winner = document.getElementById("winner");
    if(board[r][c] == "R"){
        winner.innerText = "Red Wins";
    }else{
        winner.innerText = "Yellow Wins";
    }
    gameOver = true;
    document.getElementById("restart-button").innerText = "Play Again";
    Array.from(document.getElementById("board").children).forEach((element) => {
       element.style.cursor = "auto"; 
       element.removeEventListener("click", setPiece);
    });
}

function restartGame(){
    currPlayer = playerRed;
    gameOver = false;
    const restart = document.getElementById("restart-button");
    restart.innerText = "Restart";
    document.getElementById("board").innerHTML = "";
    createBoard();
}