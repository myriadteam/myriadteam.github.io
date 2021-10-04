import React from 'react';
import '../styles/Wallet.css';

function Wallet({name, message, image, alt, link}){
    return(
        <div className='wallet__comp'>
            <div className="comp__head">{name} <img src={image} alt={alt}/></div>
            <a href={link} rel="noreferrer noopener" target="_blank"><span>{message}</span></a>
        </div>
    );
}

export default Wallet;