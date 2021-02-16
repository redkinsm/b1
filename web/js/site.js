var conn = new WebSocket('ws://localhost:8085');
conn.onopen = function(e) {
    console.log("Connection established!");
};