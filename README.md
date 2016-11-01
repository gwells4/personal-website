# personal-website
This is my personal website for the Deep Dive Coding Bootcamp.

## Milestone 1 Feedback
Nice job on defining the direction and purpose of your PWP. Based upon your Persona's needs, I see that you might be planning to focus on front-end design and development (responsive) in addition to back end (payments). What you have here should provide you with a good direction to get started with the design phase of your project. Think about how you may want to showcase your work in your layout design. How many projects would you like to feature, and how could they be laid out on the page? A graphic or visual that highlights your core skill set might also be a nice feature to consider. 

There are some technical things I'd like you to fix before beginning Milestone 2&alpha;. See Edits &amp; Suggestions below.

Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin Milestone 2&alpha;

### Edits &amp; Suggestions
- Your directory structure needs some adjustment. Create a directory named `public_html`, and move `/css` `/documentation` and `/img` inside. It might also be a good idea to rename your Milestone CSS file to be specific to your Milestone documentation, and not confused with a general CSS file you may use to develop your site. 
- Line 7 in your HTML isn't working. It looks like you're trying to add a favicon. These days, there are only about 9,999,999.99 favicon image files you need to add to your HTML &lt;head&gt; tag for full cross browser/device support. :P Have a look at this: [http://realfavicongenerator.net/](http://realfavicongenerator.net/) 

## Milestone 2&alpha; Feedback
These are great wireframes, and will serve you well as a detailed guide for your development phase. The layout choices you've made here will be a breeze to create using the Bootstrap grid system. What I am missing however is your **Content Strategy** section. 

The wireframes you've made are detailed enough to provide an outline of your content sections at a very high level, but I would still like to see additional detail about your content plan. For instance, I'd like to know more about what your plans are for featuring and displaying your Sample Work. (This points back to a question I had for you back in my Milestone 1 feedback too.) Please see the [Milestone 2 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/) and the [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/). Developing and formally outlining a Content Strategy is a standard procedure that a web developer would address with a client prior to commencing development of a project, so that's why this is required here.   

I like that you've decided to create two different navbar styles - one for desktop and one for mobile. You can selectively show and hide content based upon screen width with the help of Bootstrap's Responsive Utility classes. http://getbootstrap.com/css/#responsive-utilities Using this approach you could create one distinct navbar for the full-width layout, another navbar for mobile screens, and selectively show or hide them using pre-built CSS classes. I assume that the mobile nav will be fixed to the bottom of the mobile screen, so you may need to create some custom media queries to ensure the layout behaves properly. 

Overall, you've done great work here on the wireframes. **I can only pass this Milestone at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) as it stands, since the Content Strategy is missing. Create a brief Content Strategy by the end of day tomorrow and I'll bump the grade up to [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).**
