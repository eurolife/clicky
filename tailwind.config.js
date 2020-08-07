module.exports = {
    // purge: {
    //     enabled: true,
    //     content: [
    //         'website/**/*.js',
    //         'website/**/*.php',
    //     ]
        
    // },
    theme: {
        colors: {
            transparent: 'transparent',
            white: {
                default: '#ffffff',
            },
            grey: {
                light: '#f9f9f9',
                default: '#ccc',
                medium: '#686868',
            },
            black: {
                default: '#000',
            },
            blue: {
                default: '#6db1d4',
                navy: '#194777',
            }
            
        },
        fontFamily: {
            heading: ['ProximaNova Bold', 'ProximaNova SemiBold'], 
            b: 'ProximaNova Bold',
            sb: 'ProximaNova SemiBold',
            lt: 'ProximaNova Light',
            body: 'ProximaNova'
        },
        fontSize: {
            xs: '14px',
            sm: '15px',
            base: '17px',
            lg: '18px',
            xl: '20px',
            '2xl': '21px',
            '3xl': '25px',
            '4xl': '27px',
            '5xl': '53px',
            '6xl': '66px',
        },
        
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            opacity: {
                '20': '20%',
                '30': '30%'
            },
            boxShadow: {
                extra: '-2px 2px 8px 4px rgba(0, 0, 0, 0.1);',
            },
        },
    },
    
    
    plugins: [],
}
