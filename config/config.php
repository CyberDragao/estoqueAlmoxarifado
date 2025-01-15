<?php 
function supabaseUrl($method = ''){
    return 'https://jussefbhpjayurqyitsw.supabase.co/auth/v1';
}
function getApiConnection () {
    $apiConnection = [
        'Content-Type' => 'application/json',
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imp1c3NlZmJocGpheXVycXlpdHN3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzQxMzE3NTgsImV4cCI6MjA0OTcwNzc1OH0.tR1c8yIo240rRFlgXvbgzq4A67kbnQyWToSoXpkWAJ8'
    ] ;}

    return $apiConnection;

?>