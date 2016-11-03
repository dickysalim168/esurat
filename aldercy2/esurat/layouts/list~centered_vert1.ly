@version=2
@align=left
@vspacing=0
@hspacing=0
beginblock screenbound top
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

    begincontainer horizontal  style=empty  toplinks
		brick right loggedas
		brick right languages
    endcontainer
	begincontainer width=100% horizontal bmargin=0 style=undermenu  hmenu
 		brick left search
		brick left search_buttons
		brick left search_saving_buttons
		brick right printpanel
	endcontainer
	
endblock 



beginblock  center    
	begincontainer horizontal style=2 recordcontrols
        brick left recordcontrols_new
		brick left recordcontrol_hidden
		brick left toplinks_hidden
    endcontainer 
    begincontainer horizontal style=2 width=100% message
       brick center align=center width=100% filename=message_bare.htm message
    endcontainer
    begincontainer horizontal height=36px style=2 width=100% screenbound pagination
		brick left details_found
        brick center pagination
		brick right page_of
		brick right recsperpage
    endcontainer

    begincontainer grid delimx=10 delimy=10 width=100% style=grid grid
        brick grid 
    endcontainer 
    begincontainer horizontal height=36px style=2 width=100% screenbound pagination_bottom
		brick left details_found
        brick center pagination
		brick right page_of
		brick right recsperpage
    endcontainer
endblock
