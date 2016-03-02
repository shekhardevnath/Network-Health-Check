
var fileBrowserCount = 2;

function addSelectedOptions(select_id)
{
	srcList  = document.getElementById(select_id);
	destList = document.getElementById('selected_' + select_id);
	
	noOfOptions = srcList.length;
	for(var i=0; i<noOfOptions; i++)
	{
		if(srcList.options[i].selected)
		{
			newOpt = new Option(srcList.options[i].text, srcList.options[i].value);
			destList.options[destList.length] = newOpt;
		}
	}	
}

function removeSelectedOptions(select_id)
{
	destList = document.getElementById(select_id);
	noOfOptions = destList.options.length;
	
  for(var i=(noOfOptions-1); i >= 0; i--)
  {   	
    if(destList.options[i].selected)
    {    	
      destList.removeChild(destList.options[i]);
    }
  }
}

function addFileBrowser()
{
	objDiv   = document.getElementById('file_browser_container');
	objInput = document.getElementById('file_browser_count'); 
	
	if(objDiv.innerHTML)
	  objDiv.innerHTML += '<br><input type="file" name="attachment'+ fileBrowserCount +'" size="25">';
	else
		objDiv.innerHTML = '<input type="file" name="attachment'+ fileBrowserCount +'" size="25">';
	
	objInput.value = fileBrowserCount;
	
	fileBrowserCount++;	  	
}

function doFormSubmit()
{
	var alertMsg = "";
	var msgIncr  = 1;	
	var toList = document.getElementById('selected_to_recipient_list');
	var ccList = document.getElementById('selected_cc_recipient_list');
	
	for(var incr=0; incr<toList.options.length; incr++)
	{
		toList.options[incr].selected = true;
	}
	
	for(var incr=0; incr<ccList.options.length; incr++)
	{
		ccList.options[incr].selected = true;
	}
	
	//check empty contents
	
	if(!document.getElementById('hc_type').value)
	  alertMsg += "\n " + msgIncr++ + ". HC Type";	
	if(!document.getElementById('res_group_id').value)  
	  alertMsg += "\n " + msgIncr++ + ". Responsible Group";
	if(!document.getElementById('comment').value)  
	  alertMsg += "\n " + msgIncr++ + ". Comment"; 
	if(toList.options.length == 0)
	  alertMsg += "\n " + msgIncr++ + ". Mail To Recipients";
	  
	if(alertMsg)
	{
		alert("Please fill the fields bellow:" + alertMsg);
		return false;
	}
	else
	{	
	  return doConfirm('You are going to submit. Continue?')
  }
}