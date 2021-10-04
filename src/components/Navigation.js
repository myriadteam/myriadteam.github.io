import React, { useState, useRef, useEffect } from 'react';
import '../styles/Navigation.css';
import logo from '../media/images/myriad_logo.png';

const Navigation = () => {
    const menuRef = useRef(null);
    const [slide, setSlide] = useState(false);
    const slideMenuDown = () => setSlide(!slide);
    
    useEffect(() => {
        let menuButton = document.getElementById("menuBtn");

        if (slide !== false) {
            menuButton.innerText = "Close";
        } else {
            menuButton.innerText = "Menu";
        }

    }, [slide]);

    return (
        <div className="nav__container">
            <div className={`nav__bar ${slide ? "active" : "inactive"}`}>
                <a className="nav__title" href="/">
                    <img src={logo} alt="logo"/>
                    <span className={`title ${slide ? "active" : "inactive"}`}>Myriad</span>
                </a>

                <div id="menuBtn" className={`nav__button ${slide ? "active" : "inactive"}`} onClick={slideMenuDown}>Menu</div>
            </div>

            <div ref={menuRef} className={`menu ${slide ? "active" : "inactive"}`}>
                <ul className={`menu__items ${slide ? "active" : "inactive"}`}>
                    <li className="menu__links" onClick={slideMenuDown}>
                        <a href="#why">Why Myriad</a>
                    </li>
                    <li className="menu__links" onClick={slideMenuDown}>
                        <a href="#exchanges-wallets">Exchanges & Wallets</a>
                    </li>
                    <li className="menu__links" onClick={slideMenuDown}>
                        <a href="#mine">Mine</a>
                    </li>
                    <li className="menu__links" onClick={slideMenuDown}>
                        <a href="#resources">Resources</a>
                    </li>
                </ul>
            </div>
        </div>
    )
}

export default Navigation
