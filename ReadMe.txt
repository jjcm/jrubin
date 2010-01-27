1.) Setting jenniferrubin.com to point to this.
Setting your domain name to point to here is actually pretty easy. You'll need to find out the site that you registered the domain name with, or find the person who set it up for you. What they'll need to do is set up a "CNAME" entry that points to http://jenerubin.jjcm.org. Once they do this, when you access jenniferrubin.com it will come up as the page you've already seen.




2.) Technical details
The project uses a backend of Wordpress, using a custom theme and specific pages set up to work together. As such, if you want to deploy this elsewhere you'll need wordpress (preferably running on apache with modphp installed). In addition, it uses the wordpress plugin NexGen Gallery. There are also specific pages that the design depends upon, these are such:
about page (resolved to root)
blog (/blog)
Artist's Statement (/statement)
Portfolio (/portfolio)
Resume (/resume, using Blank template)

Each of these will have to be configured with the corrisponding path and template. Once those are up, everything should work correctly. NexGen Gallery uses shortcodes to describe where galleries should be present, the ones currently used are [slideshow id=1] on the about page (home page), and [nggalery id=1] on the portfolio page. Make sure that you have an initial gallery created via the NexGen plugin. It depends on having that first one present.
That should be everything. As always yell at me if you have questions.



2.1.) Getting updates
The project is stored in a github repository. As such, you can pull new data from http://github.com/pwnies/jrubin
There are instructions there on how to get that, but it essentially is just a standard git clone command. You can also download everything as a .zip file from there. Just place all the files in your wp-content/themes folder of your wordpress install and it should magically work.
