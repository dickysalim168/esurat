beginblock top


    begincontainer horizontal style=2 width=100% toplinks
        brick left loggedas
		brick left toplinks_advsearch
		brick left toplinks_export
		brick left toplinks_print
		brick left toplinks_import
		brick left toplinks_export_links
		brick left languages		
    endcontainer
endblock 

beginblock width=260 left
    begincontainer vertical style=menu rmargin=5  width=100% left
		brick color1 vmenu
	    brick color1 vsearch1
		brick color1 vsearch2
        brick color2 vdetails_found
        brick color1 vpage_of
        brick color1 vrecsperpage
		brick searchpanel
   endcontainer 
endblock 

beginblock center
	begincontainer vertical style=1 width=100% bigblock
		begincontainer horizontal color=2 style=2 width=100% recordcontrols
			brick left recordcontrols_new
			brick left recordcontrol
		endcontainer 
		begincontainer horizontal color=2 style=2  width=100% message
		   brick center filename=message_bare.htm message
		endcontainer
		begincontainer grid delimx=10 delimy=10  color=2 style=grid grid
			brick grid
		endcontainer
		begincontainer horizontal color=2 style=2  width=100% pagination
			brick center pagination
		endcontainer
	endcontainer
endblock