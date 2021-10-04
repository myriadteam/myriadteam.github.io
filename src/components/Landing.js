import React from 'react';
import '../styles/Landing.css';

const Landing = () => {
    return (
        <div className="landing__container">
            <div className="landing__title">
                A coin for everyone.
            </div>

            <div className="landing__buttons">
                <div className="landing__download">
                    <a href="#exchanges-wallets">Download Wallet</a>
                </div>

                <div className="landing__mining">
                    <a href="#mine">Start Mining</a>
                </div>
            </div>
        </div>
    )
}

export default Landing
