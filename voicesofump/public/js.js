function showReplyForm(commentID){

    document.getElementById('reply-form-'+commentID).style.height="auto"
    document.getElementById('reply-form-'+commentID).style.display="block"
    document.getElementById('showReplyForm-'+commentID).style.display="none"
    document.getElementById('hideReplyForm-'+commentID).style.display="flex"
}
function hideReplyForm(commentID){
    document.getElementById('reply-form-'+commentID).style.height="0px"
    document.getElementById('reply-form-'+commentID).style.display="none"
    document.getElementById('showReplyForm-'+commentID).style.display="flex"
    document.getElementById('hideReplyForm-'+commentID).style.display="none"
}


function showReplies(commentID){

    document.getElementById('replies-'+commentID).style.height="auto"
    document.getElementById('replies-'+commentID).style.display="block"
    document.getElementById('showreply-'+commentID).style.display="none"
    document.getElementById('hidereply-'+commentID).style.display="flex"
}
function hideReplies(commentID){
    document.getElementById('replies-'+commentID).style.height="0px"
    document.getElementById('replies-'+commentID).style.display="none"
    document.getElementById('showreply-'+commentID).style.display="flex"
    document.getElementById('hidereply-'+commentID).style.display="none"
}
