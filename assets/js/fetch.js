let btn = document.getElementById('btn')
btn.addEventListener('click',function (e){
    fetch('fetch.php',{
        method:'POST',
        body: JSON.stringify({'greetings':'hello there you...this is just a test '}),
        headers:{
            'Content-Type': 'application/json'
        }
    }).then(function (response){
        return response.json()
    }).then(function(response){
        console.log(response)
    })
})
