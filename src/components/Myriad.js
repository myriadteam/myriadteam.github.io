import React from 'react'
import '../styles/Myriad.css'

const Myriad = () => {
    return (
        <div className="myriad__container">
            <h1>What Is MyriadCoin?</h1>
            <iframe 
                width="100%" 
                height="100%" 
                src="https://www.youtube.com/embed/JWfxr5cQJug" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
            >
            </iframe>
        </div>
    )
}

export default Myriad
