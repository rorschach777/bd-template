function testing(){
    let img = document.getElementsByTagName('img');
    let BackgroundImgs = document.getElementsByTagName('img');
    let allImgs = [...imgs];
    allImgs.forEach((cur, idx)=>{
        cur.style.display = 'none';
    })
}
testing();