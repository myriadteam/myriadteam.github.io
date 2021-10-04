import React from 'react';
import '../styles/WhyMyriad.css';

const WhyMyriad = () => {
    return (
        <div id="why" className="why__container">
            <h1 className="why__header">Why Myriad</h1>
            
            <div className="why__info">
                <div className="info">
                    <span className="info__title">Multi-Algorithm</span> 
                    <br/>
                    Myriad is the first currency to support 5 algorithms, catering for ASIC, GPU and CPU mining. Currently, those algorithms consist of SHA256d, Scrypt, Myr-Groestl, Argon2d and Yescrypt.
                    <br/> <br/>
                    Myriad's multi algorithm approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks.
                </div>
                <div className="info">
                    <span className="info__title">Merge Mining</span> 
                    <br/>
                    Merge mining is allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms.
                    <br/> <br/>
                    Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain. 
                </div>
                <div className="info">
                    <span className="info__title">Distribution</span>
                    <br/>
                    Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The <a id="block__link" href="https://xmy-blockbook1.coinid.org/block/cb41589c918fba1beccca8bc6b34b2b928b4f9888595d7664afd6ec60a576291" rel="noreferrer noopener" target="_blank">first mined block</a> came 4 minutes later, thus establishing that there was no premine.
                    <br/> <br/>
                    The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR. Target block time is 60 seconds, or 300 seconds per algorithm.
                </div>
            </div>
        </div>
    )
}

export default WhyMyriad
