beginblock top
	
   
	begincontainer horizontal style=1 width=100% search
 		brick left search
		brick left search_buttons
		brick right details_found
		brick right page_of
		brick right recsperpage

    endcontainer

endblock 



beginblock center
		begincontainer horizontal style=empty width=100% recordcontrols
			brick left recordcontrols_new
			brick left recordcontrol
		endcontainer 
		begincontainer horizontal style=empty width=100% message
		   brick center filename=message_bare.htm message
		endcontainer
		begincontainer grid delimx=10 delimy=10 style=grid  grid
			brick grid
		endcontainer
		begincontainer horizontal style=empty width=100%  pagination
			brick center pagination
		endcontainer
endblock