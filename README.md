# CINF362FinalProject

/* --- Style Guide for css --- */

/* ALWAYS USE TABS FOR INDENTATION */
/* -------- NEVER SPACES -------- */

/* --- Use indentation to indicate children --- */

/* --- Below is some example html and how you would structure the corresponding css ---  */
/*
    <section className="exampleClass">
        <div>
            <p>paragraph text</p>
            <p>paragraph text</p>
            <p>paragraph text</p>
        <div>
        <img src="./thisIsTheFilePathToAnImage"/>
    <section> 
*/
    .exampleClass {
        display: flex;
    }

        .exampleClass div {
            margin: 5%;
        }

            .exampleClass div p {
                color: white;
            }
        
        .exampleClass img {
            width: 50px;
        }

/*

There are 3 rules for grouping: 

    1. Box Model — display, margin, padding, position, width, etc.
    2. Visual Decorations — background, border, transform, outline, etc.
    3. Typography — color, font, text-decoration, etc.

    Each of these groups are then grouped in a logical order that makes sense,
    there is no strict rules for how rules in each section should be grouped, 
    just use some common sense...

*/

    .exampleClass {
        /* Box model */
        display: flex;
        margin: 0 0 1rem;
        padding: 0.5em;
    
        /* Visual decorations */
        background-color: darkgreen;
        border: 1px solid green;
    
        /* Typography */
        color: red;
        font-family: sans-serif;
    } 


/* Always label new sections with a title STARTING WITH AN = 
This is important as it allows for easier searching within the IDE for different sections 

    ex) 
        /* --------------- =Header --------------- */ 

        /* 
            header {...}
            nav {...} 
        */

        /* --------------- =About --------------- */ 

        /*
            section {...}
            aside {...}
        */

        /* --------------- =Contact --------------- */ 
        
           /*
            section {...}
            footer {...}
        */
                

/* --- End of style guide --- */
