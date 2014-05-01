// JavaScript Document
//Table of Contents script by Ben Ratliff

// function to buid Table of Contents on all conference pages //


jQuery(document).ready(function($){
	console.log("init function, yo");
	 /*var t=setTimeout("buildTOC()",1000);
	 //buildTOC();
	//var internalLinks = $(".info-links");
	var attachDiv = internalLinks[0].childNodes[0];
	

 
    var contentDiv = $('.entry-content');
    //var contentDiv = getElementsByClassName("entry-content");
    var num = contentDiv.length;*/

    var headsToChange = document.getElementsByTagName("h2");
	var mainHead = document.getElementsByTagName("h1");

    var toc_list = document.createElement('ul');
	toc_list.setAttribute('id', 'pageLinks');

	var topLinkBox = document.createElement('div');
	topLinkBox.setAttribute('id', 'topBox');
	
	var linkToTop = document.createElement('a');
	linkToTop.setAttribute('href', '#top');
	
	var topTxt = document.createTextNode('Return to top ^');
	linkToTop.appendChild(topTxt);
	topLinkBox.appendChild(linkToTop);
	//contentDiv[0].appendChild(topLinkBox);
	
  
    //listItem.appendChild(txt);
    //toc_list.appendChild(listItem);
  
     //var divToAdd = contentDiv[0];
     //var divChild = internalLinks.childNodes[1];
     
	 
	 if (headsToChange.length != 0) {
       $('.internal_links').append(toc_list);
        //internalLinks.appendChild(toc_list);
	 }

	 var i=0;
	 
	 while (i<= headsToChange.length) {
		 
		var thisHeader = headsToChange[i];
		var headerText = thisHeader.innerHTML;
		var thisAnchor = document.createElement('a');
		var thisLink = document.createElement('a');
		var anchorName = "header" + i;
		var newListItem = document.createElement('li');
		var liTxt = document.createTextNode(headerText);
		
		// make link attributes //
		thisAnchor.setAttribute('name', anchorName);
		thisLink.setAttribute('href', "#" + anchorName);
		//var txtToAdd = "<a name=" + anchorName + ">"
		
		thisLink.appendChild(liTxt);
		newListItem.appendChild(thisLink);
		toc_list.appendChild(newListItem);
		
		thisHeader.appendChild(thisAnchor);
		thisAnchor.innerHTML = headerText;
	
		var childText = thisHeader.childNodes[0];
		thisHeader.removeChild(childText);

		i++;
	 }
});

