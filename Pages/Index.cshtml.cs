using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace rddSoftwareSite.Pages
{
    public class IndexModel : PageModel
    {
        public static readonly string title = "Home";

        private readonly ILogger<IndexModel> _logger;

        public IndexModel(ILogger<IndexModel> logger)
        {
            _logger = logger;
        }

        public void OnGet()
        {

        }

        public static List<string> GetLanguages()
        {
            List<string> languages = new List<string>
            {
                "C++",
                "C#",
                "JavaScript/TypeScript",
                "Python",
                "SQL",
                "MIPS",
                "HTML",
                "ASP.NET"
            };

            return languages;
        }
    }
}