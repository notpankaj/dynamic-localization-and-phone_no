
console.log("AHSDHASHSAJDSJLDSKJ")
//set Dynamic phone no
function setDynamicPhoneNo () {
    if(localStorage.getItem('activeNO')){
        renderActiveNo.innerHTML =  localStorage.getItem('activeNO');
    }
}

const renderActiveNo = document.querySelector('.renderActiveNo');
if(renderActiveNo) setDynamicPhoneNo() 


const setNum = document.querySelectorAll('.setNum');
if(setNum){
    setNum.forEach(num => {
    num.addEventListener('click', e => {
            if(e.target.dataset.no){
                localStorage.setItem('activeNO',e.target.dataset.no);
                setDynamicPhoneNo();
            }
        })
    })
}