
initialFunc(2000,1000)

//initial
function initialFunc(period,fadeInPeriod){
  let timer;
  let els= document.getElementsByTagName('li')
  let currentIndex = 0;
  //give elements opacity property
  swithPosition(currentIndex,els)
  loopEls(currentIndex,els)
  
  timer = setInterval(rolling,period)
  
  function rolling(){
    //update currentIndex
    currentIndex = generateNextEl(currentIndex,els.length)
    fadeIn(currentIndex,els,fadeInPeriod)
  }
}

//function change current element
function generateNextEl(currentIndex,max){
  if(currentIndex + 1 >= max){
     currentIndex = 0
   }else{
    currentIndex++
   }
  return currentIndex
}
//function to change current and other element
function loopEls(currenIndex,els){
  for(let i = 0;i< els.length;i++){
    if(i == currenIndex){
       els[i].style.opacity = 1;
      continue;
     }
    els[i].style.opacity = 0
  }
}

function changeOtherEls(currenIndex,els){
  for(let i = 0;i< els.length;i++){
    if(i == currenIndex){
      continue;
     }
    els[i].style.opacity = 0
  }
}

function swithPosition(currentIndex,els){
  for(let i = 0;i<els.length;i++){
    if(i == currentIndex){
      els[i].style.zIndex = 1
      continue
    }
    els[i].style.zIndex = 0
  }
}

function fadeIn(currentIndex,els,period,count){
  swithPosition(currentIndex,els)
  clearInterval(els[currentIndex].timer)
  if(!count){count = 5}
  let COUNT = 1/count
  let per = period/count
  let opValue = Number.parseFloat(els[currentIndex].style.opacity)
  console.log(els[currentIndex],per,opValue)
  els[currentIndex].timer = setInterval(function(){
      //incease opacity
      opValue+=COUNT
      if(opValue > 1){
        els[currentIndex].style.opacity = 1
        clearInterval(els[currentIndex].timer)
        changeOtherEls(currentIndex,els)
        //loopEls(currentIndex,els)
      }else{
        els[currentIndex].style.opacity = opValue
      }
  },per)
}

function fadeOut(el,period,count){
  clearInterval(el.timer)
  if(!count){count = 5}
  let COUNT = 1/count
  let per = period/count
  let opValue = Number.parseFloat(el.style.opacity)
  opValue-=COUNT
  el.timer = setInterval(function(){
      //decrease opacity
      if(opValue < 1){
        el.style.opacity = 0
        clearInterval(el.timer)
      }else{
        el.style.opacity = opValue
      }
  },per)
}

