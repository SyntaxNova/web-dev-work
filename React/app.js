// const heading = React.createElement(
//     'h1',
//     {a:'abc'},
//     'this is heading'
// );

// const heading = <h1>{props.heading}</h1>

// ReactDOM.render(
//     heading,
//     document.getElementById('react-container')
// );

// const paragraph = React.createElement(
//     'p',
//     null,
//     'this is the paragraph using react'
// );

// const paragraph = <p>This is the paragraph using react</p>

// const box = React.createElement(
//     'div',
//     {className: 'box'},
//     heading,
//     paragraph
// );

class Box extends React.Component {
    state = {
        color:"black"
    };

    ChangeColor = (color) =>{
        this.setState({
            color:color
        });
    }

    render(){
        return(
            <div className="box">
                <h1 className={this.state.color}>{this.props.heading}</h1>
                <p>This is the paragraph using react</p>
                <button onClick={()=> this.ChangeColor("red")}>red</button>
                <button onClick={()=> this.ChangeColor("green")}>green</button>
                <button onClick={()=> this.ChangeColor("orange")}>orange</button>
                <button onClick={()=> this.ChangeColor("blue")}>blue</button>
            </div>
        )
    };
};

// Alternate way to create Box component

// const Box = () =>{
//     return(
//     <div className="box">
//         {heading}
//         {paragraph}
//     </div>
//     );
// };

function App (){
    return(
        <div className="col">
            <div className="row">
                <Box heading="First Heading"/> 
            </div>
            <div className="row">
                <Box heading="Second Heading"/>
            </div>
            <div className="row">
                <Box heading="Third Heading"/> 
            </div>
            <div className="row">
                <Box heading="Fourth Heading"/>
            </div>
            <div className="row">
                <Box heading="Fifth Heading"/> 
            </div>
            <div className="row">
                <Box heading="Sixth Heading"/>
            </div>
            <div className="row">
                <Box heading="Seventh Heading"/> 
            </div>
            <div className="row">
                <Box heading="Eight Heading"/>
            </div>
            <div className="row">
                <Box heading="Nineth Heading"/>
            </div>
            <div className="row">
                <Box heading="Tenth Heading"/> 
            </div>
            <div className="row">
                <Box heading="Eleven Heading"/>
            </div>
            <div className="row">
                <Box heading="Twelve Heading"/>
            </div>
        </div>
    );
};

ReactDOM.render(
    <App/>,
    document.getElementById('react-container')
);