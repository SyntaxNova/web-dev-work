// const heading = React.createElement(
//     'h1',
//     {a:'abc'},
//     'this is heading'
// );
const name = 'React';
const myAttr = 'abc';
const heading = <h1 id={myAttr}>This is {name} heading</h1>

ReactDOM.render(
    heading,
    document.getElementById('react-container')
);

// const paragraph = React.createElement(
//     'p',
//     null,
//     'this is the paragraph using react'
// );

const paragraph = <p>This is the paragraph using react</p>

// const box = React.createElement(
//     'div',
//     {className: 'box'},
//     heading,
//     paragraph
// );

function Box () {
    return(
    <div className="box">
        {heading}
        {paragraph}
    </div>
    );
};

function App  (){
    return(
        <div>
            <Box/>
            <Box/>
            <Box/>
        </div>
    );
};

ReactDOM.render(
    <App/>,
    document.getElementById('react-container')
);