function show(){
    document.getElementById('reply-form').style.height="400px"
    document.getElementById('reply-form').style.display="block"
    document.getElementById('show').style.display="none"
}
function hide(){
    document.getElementById('reply-form').style.height="0px"
    document.getElementById('reply-form').style.display="none"
    document.getElementById('show').style.display="inline"
}

function showReplies(){
    document.getElementById('replies').style.height="400px"
    document.getElementById('replies').style.display="block"
    document.getElementById('showreply').style.display="none"
    document.getElementById('hidereply').style.display="flex"
}
function hideReplies(){
    document.getElementById('replies').style.height="0px"
    document.getElementById('replies').style.display="none"
    document.getElementById('showreply').style.display="flex"
    document.getElementById('hidereply').style.display="none"
}
